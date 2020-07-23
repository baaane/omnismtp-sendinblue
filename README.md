# omnismtp-sendinblue

# OmniSmtp-SendInBlue

###### An SMTP driver for OmniSmtp Processing library for PHP

# Usage

```php
<?php

$sendinblue = OmniSmtp::create(\OmniSmtp\SendInBlue::class, 'test-api-key');

$sendinblue->setSubject('The Mail Subject')
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
```
