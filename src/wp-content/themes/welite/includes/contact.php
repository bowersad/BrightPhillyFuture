<?php
    if(empty($_POST)) { die(); }

    /*
    * Clas Name: InafxContact
    * Description: It contains WordPress based mail function to send contact mail via 
    *              contact form generated by its shortcode.
    */        
    class InafxContact {

        /*
        * default constructor of InafxContact class
        *
        * @see __construct
        */
        function __construct() {
        }

        /*
        * Send contact mail method.
        *
        * @see InafxContact::send_contact_mail()
        *
        * @return  echo json based string messages.
        */
        public function send_contact_mail() {
            $MailTo = inafx_theme_option( 'opt_contactform_mailto' );
    
            $txtName = $_POST["txtName"];
            $txtEmail = $_POST["txtEmail"];
            $txtMessage = $_POST["txtMessage"];
    
            $success = TRUE;    
    
            try{
                if(trim($txtEmail)==NULL){
                    throw new Exception( theme_locals( 'contact_email_required' ) );
                }
                else
                {
                    if (!preg_match("/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", trim($txtEmail)))
                    {
                        throw new Exception( theme_locals( 'contact_email_invalid' ) );
                    }
                }
    
                if(trim($txtName)==NULL){
                    throw new Exception( theme_locals( 'contact_name_required' ) );
                }
    
                if(trim($txtMessage)==NULL){
                    throw new Exception( theme_locals( 'contact_message_required' ) );
                }
    
                $MailSubject = '['.get_bloginfo( 'name' ).'] '.inafx_theme_option( 'opt_contactform_subject' );
                $MailBody = "<strong>Email: </strong> ".$txtEmail."<br />";
                $MailBody .= "<strong>Name: </strong> ".$txtName."<br />";
                $MailBody .= "<strong>Message: </strong> ".$txtMessage."<br />";
    
                $MailFrom = $txtEmail;
    
                $MailHeaders = 'From: '.$MailFrom;
    
                add_filter( 'wp_mail_content_type', 'set_html_content_type' );
                $result = wp_mail($MailTo, $MailSubject, $MailBody, $MailHeaders);
                remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
    
                if(!$result){
                    $success = FALSE;
                }
                else{
                    $success = TRUE;
                }
            }
            catch (Exception $e){
                $success = FALSE;
            }
    
            if ($success)
            {
                echo json_encode(
                    array(
                        'message' => inafx_theme_option( 'opt_contactform_success' ),
                        'status' => 'success'
                    )
                );
            }
            else
            {
                echo json_encode(
                    array(
                        'message' => inafx_theme_option( 'opt_contactform_failure' ),
                        'status' => 'error'
                    )
                );
            }
        }
    }
    $InafxContact = new InafxContact();
    $InafxContact->send_contact_mail();
    die();
?>
