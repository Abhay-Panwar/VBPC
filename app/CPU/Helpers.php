<?php
namespace App\CPU;
use App\Mail\SampleMail;
use App\Models\Notification;

use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function sendEmail($employee ,$mail, $pass)
    {
        $url="http://vbpc.lc/employee-login";
        
        $content = [
            'subject' => 'VBPC Employee Id Password',
            'employee' => $employee ,
            'mail' => $mail ,
            'pass' => $pass ,
            'url' => $url ,

        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
    public static function leave_mail_admins($employee,$leaveid,$empleave,$first,$last,$lt_name){
        if($empleave < 20){
            $leaves= 20 - $empleave;
        }else{
            $leaves='he/she not have available leaves';
        }
        $mail="abhay@unicloudtech.com";
        $recipients = [
            'abhay2004panwar@gmail.com',
            'singh121hitan@gmail.com',
            // Add more email addresses as needed
        ];
        $url="http://vbpc.lc/updating-leaves-form/edit/".$leaveid;
        
        $content = [
            'subject' => 'VBPC Leave Request',
            'body' => 'This employee have a Request take a Leave',
            'employee' => $employee ,
            'name'=> $first .' '. $last,
            'lt_name'=> $lt_name,
            'leaves'=> $leaves,
            'url' => $url ,

        ];
        
        Mail::to($mail)->cc($recipients)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
    public static function leave_mail($employee ,$mail, $approval,$comment)
    {   if($approval==1)
        {
            $approval='Approved';
        }elseif($approval==2){
            $approval='Decline';
        }else{
            $approval='Pending';

        }
        $content = [
            'subject' => 'Leave Notification Mail',
            'employee' => $employee ,
            'mail' => $mail ,
            'approval' => $approval ,
            'comment' => $comment ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
    public static function notification()
    {
        $Notification = Notification::select('*')->orderBy('id', 'DESC')->get();
        return  $Notification;
    }
}