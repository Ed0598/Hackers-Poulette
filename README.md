# Hackers Poulette

Project completed in two days (January 2023). Made with PhP,Javascript,CSS
Project refactorized and deployed on 23th February 2023.
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


## Features
-   In case of wrong input, the form should display a useful visual clue about the error, below the input field.
    ![Capture d’écran 2023-01-31 161941](https://user-images.githubusercontent.com/117506113/215803322-6c417d2f-f0c1-4d1e-a357-e401dff63188.png)
-   The data has to be _sanitised_ and _validated_ (server side)
-   Once the form is validated, the data should be send to the database.
-   Spam prevention using [honeypot]

### Extras

-   Client side validation with _JavaScript_

![Capture d’écran 2023-01-31 162932](https://user-images.githubusercontent.com/117506113/215803616-bcb24890-c112-4695-a383-d0ddf104ba9a.png)
