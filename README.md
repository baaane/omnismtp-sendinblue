# OmniSmtp-SendInBlue

###### An SMTP driver for OmniSmtp Processing library for PHP

# Usage

```php
<?php

$sendinblue = OmniSmtp::create(\OmniSmtp\SendInBlue::class, 'test-api-key');

$sendinblue->setSubject('The Mail Subject')
           ->setFrom('john.doe@example.com')
           ->setRecipients('jane.doe@example.com', 'test@email.com')
           ->setContent('<p>Hello From SendInBlue OmniSmtp</p>')
           ->send();
```
