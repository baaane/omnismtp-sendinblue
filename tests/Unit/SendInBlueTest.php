<?php


namespace Tests\Unit;

use OmniSmtp\OmniSmtp;

class SendInBlueTest extends \SendInBlue\Tests\TestCase
{
    
    public function testSendInBlueEmail()
    {
        $sendinblue = OmniSmtp::create(\OmniSmtp\SendInBlue::class, 'test-api-key');

        $response = $sendinblue->setSubject('The Mail Subject')
                   ->setFrom([
                        'name' => 'John Doe',
                        'email' => 'john.doe@example.com'
                   ])
                   ->setRecipients([
                        [
                            'name' => 'Jane Doe',
                            'email' => 'jane.doe@example.com'
                        ]
                   ])
                   ->setContent('<p>Hello From SendInBlue OmniMail</p>')
                   ->send();
        $this->assertTrue($response);
    }
}