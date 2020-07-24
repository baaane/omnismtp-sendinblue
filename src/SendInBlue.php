<?php

namespace OmniSmtp;

use OmniSmtp\Common\AbstractProvider;

class SendInBlue extends AbstractProvider
{

    /**
     * @inheritDoc
     */
    public function getAuthorizationHeaderName()
    {
        return $this->getData(self::AUTHORIZATION_NAME) ? $this->getData(self::AUTHORIZATION_NAME) : 'api-key';
    }

    /**
     * @inheritDoc
     */
    public function getSmtpEndpoint()
    {
        return 'https://api.sendinblue.com/v3/smtp/email';
    }

    /**
     * @inheritDoc
     */
    public function setFrom(string $from)
    {
        return $this->setData(self::FROM, ['sender' => ['email' => $from]]);
    }

    /**
     * @inheritDoc
     */
    public function setRecipients(...$recipients)
    {
        $emails = [];
        foreach($recipients as $recipient){
            $emails[] = [
                'email' => $recipient
            ];

            unset($recipient);
        }

        return $this->setData(self::RECIPIENTS, ['to' => $emails]);
    }

    /**
     * @inheritDoc
     */
    public function setContent(string $html)
    {
        return $this->setData(self::BODY, ['htmlContent' => $html]);
    }

}