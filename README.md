# Hackers Poulette

Project completed in two days. Made with PhP,Javascript,CSS
## The mission

The company _Hackers Poulette ™_ sells Raspberry Pi accessory kits to build
your own. They want to allow their users to contact their support team. Your
mission is to create a fully-functioning online "contact support" form, in _PHP_. It must _display a contact form_ and _process the received answer_ (sanitize, validate, answer the user).

![Capture d’écran 2023-01-31 161837](https://user-images.githubusercontent.com/117506113/215803094-7bf324e0-f40c-4a65-b4b7-9e77601e2cb4.png)

## The form

At the minimum the form should include the following fields:

-   name
    > required, string, at least 2 char, max 255
-   firstname
    > required, string, at least 2 char, max 255
-   email address
    > required, at least 2 char, max 255, must be a valid email address
-   comment
    > required, at least 250 char max, max 1000 char

    ![Capture d’écran 2023-01-31 161941](https://user-images.githubusercontent.com/117506113/215803322-6c417d2f-f0c1-4d1e-a357-e401dff63188.png)



## 🌱 Must-have features

-   Use of PHP
-   Database with PDO connection
-   The form's html code _must_ be [semantically valid](https://www.w3.org/2001/sw/wiki/W3C_Validator) and [accessible](https://formspree.io/blog/accessible-forms/)
-   In case of wrong input, the form should display a useful visual clue about the error, below the input field.
-   The error message must be readable and helpful to users.
-   The data has to be _sanitised_ and _validated_ (server side)
-   Once the form is validated, the data should be send to the database.
-   Spam prevention using [honeypot](https://www.google.com/search?q=honeypot+spam+prevention) or [captcha](https://www.google.com/search?q=captcha+spam+prevention)

### 🌼 Nice-to-have

If you have ticked all the above boxes, you can add some of the following features:

-   Client side validation with _JavaScript_
![Capture d’écran 2023-01-31 162932](https://user-images.githubusercontent.com/117506113/215803616-bcb24890-c112-4695-a383-d0ddf104ba9a.png)
-   Work on a good and clear _user experience_ (UX)
-   If all required inputs are valid, the script should respond by email to a given address, confirming the reception of the message. (you can use your own address for testing purposes)
-   Discover [composer](https://getcomposer.org/doc/00-intro.md) and use it to install a PHP library such as [SwiftMailer](https://symfony.com/doc/current/mailer.html) to send the email or to validate the form with library such as [rakit/validation](https://github.com/rakit/validation), [valitron](https://github.com/vlucas/valitron) or [symfony/mailer](https://symfony.com/doc/current/mailer.html)
-   Protect your form against the most common attacks (CSRF, XSS, SQL injection, etc.) ressources: [OWASP](https://owasp.org/www-project-top-ten/), [OWASP Cheat Sheet XSS](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html), [OWASP Cheat Sheet SQL injection](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
-   Create a dashboard to display the received messages (admin side) which allow to manage the messages status (handled, not handled, response, etc..) (this is a big one I know, you probably won't have time to do it all, but it's a good exercise to learn how to manage a database and a dashboard)

### Resources

-   [error message](http://uxmas.com/2012/the-4-hs-of-writing-error-messages)
-   [class mailer](https://github.com/PHPMailer/PHPMailer)
-   [accessible form](https://formspree.io/blog/accessible-forms/)
-   [semantically valid](https://www.w3.org/2001/sw/wiki/W3C_Validator)