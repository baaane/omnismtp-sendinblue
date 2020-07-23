<?php

namespace OmniSmtp;

use OmniSmtp\Common\AbstractProvider;

class SendInBlue extends AbstractProvider
{

    public function getSmtpEndpoint()
    {
        return 'https://api.sendinblue.com/v3/smtp/email';
    }

    /**
     * @inheritDoc
     */
    public function setFrom(array $from)
    {
        return $this->setData(self::FROM, ['sender' => $from]);
    }

    /**
     * @inheritDoc
     */
    public function setRecipients(array $recipients)
    {
        return $this->setData(self::RECIPIENTS, ['to' => $recipients]);
    }

    /**
     * @inheritDoc
     */
    public function setContent(string $html)
    {
        return $this->setData(self::BODY, ['htmlContent' => $html]);
    }

}