<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $content;

    public function __construct(array $content) {
        $this->content = $content;
    }

    public function build()
    {   if($this->content['subject']==='VBPC Employee Id Password'){
        return $this->subject($this->content['subject'])
        ->view('pages.test-mail', ['content' => $this->content]);
        
            }elseif($this->content['subject']==='Leave Notification Mail'){
                return $this->subject($this->content['subject'])
                ->view('pages.leave-mail', ['content' => $this->content]);
            }
            elseif($this->content['subject']==='Password reset'){
                return $this->subject($this->content['subject'])
                ->view('pages.password-mail', ['content' => $this->content]);
            }
            elseif($this->content['subject']==='VBPC Leave Request'){
                return $this->subject($this->content['subject'])
                ->view('pages.leave-request-mail', ['content' => $this->content]);
            }
    }
}
