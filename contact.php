<?php include("header.php"); ?>

<main>
    <form action="process_contact.php" method="POST" class="contact-form">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

        <button type="submit" class="submit-btn">Send Message</button>
    </form>
</main>


<?php include("footer.php"); ?>