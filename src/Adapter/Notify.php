<?php

namespace Patterns\Adapter;

/**
 * Class Message.
 */
class Message {
  protected $username = '';
  protected $password = '';

  /**
   * Message constructor.
   *
   * @param string $username
   *   Username.
   * @param string $password
   *   Password.
   */
  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  /**
   * Send the message.
   *
   * @param string $to
   *   Who the message is going to.
   * @param string $from
   *   Who the message is from.
   * @param string $body
   *   Email contents.
   * @param string $subject
   *   Email subject.
   *
   * @return mixed
   *   Confirmation of sent message.
   */
  public function send($to, $from, $body, $subject = '') {

    if ('' == $subject) {
      return $this->sendSms($to, $from, $body);
    }
    else {
      return $this->sendEmail($to, $from, $body, $subject);
    }
  }

  /**
   * Send SMS message.
   *
   * @param string $to
   *   Who the message is going to.
   * @param string $from
   *   Who the message is from.
   * @param string $body
   *   Email contents.
   *
   * @return mixed
   *   Confirmation of sent message.
   */
  protected function sendSms($to, $from, $body) {
    $twilio = new Services_Twilio($this->username, $this->password);

    $message = $twilio->account->messages->sendMessage(
      $from,
      $to,
      $body
    );

    return $message;
  }

  /**
   * Send email.
   *
   * @param string $to
   *   Who the message is going to.
   * @param string $from
   *   Who the message is from.
   * @param string $body
   *   Email contents.
   * @param string $subject
   *   Email subject.
   *
   * @return mixed
   *   Confirmation of sent message.
   */
  protected function sendEmail($to, $from, $body, $subject) {
    $sendgrid = new SendGrid('fake username2', 'fake password 2');
    $email    = new SendGrid\Email($this->username, $this->password);
    $email->addTo($to)
          ->setFrom($from)
          ->setSubject($subject)
          ->setText($body)
          ->setHtml($body);

    return $sendgrid->send($email);
  }

}
