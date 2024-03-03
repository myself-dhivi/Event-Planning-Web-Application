<?php
require '../Templates/Header.php';
require '../Templates/Nav.php';
?>


<link rel="stylesheet" href="../css/slider.css">



   


    <section class="banner" id="home">
        <h1>Welcome to our Event Planning Website</h1>
        <p>We are here to help you plan your next big event</p>
        <form onsubmit="bookNow(event)">
  <input type="text" placeholder="Enter location" id="location" required>
  <select id="event" required>
    <option value="" disabled selected>Type of Event</option>
    <option value="Weddings">Weddings</option>
    <option value="Birthdays">Birthdays</option>
    <option value="Ear Piercing Ceremony">Ear Piercing Ceremony</option>
    <option value="Housewarming">Housewarming</option>
    <option value="Baby Shower">Baby Shower</option>
  </select>
  <input type="date" placeholder="Select a date" id="date" required>
  <input type="submit" value="BOOK NOW!">
</form>


    </section>
    <section class="about" id="about">
        <div class="about-text">
            <h2>About Us</h2>
            <p> We are a team of passionate individuals dedicated to showcasing and promoting the rich Tamil cultural
                heritage through our events. Our team comprises of experts in various fields, including event
                management, marketing, design, and communication, all working together towards a common goal of
                celebrating Tamil culture.

                Our events are carefully curated to reflect the diversity and beauty of Tamil culture. From traditional
                music and dance performances to delicious Tamil cuisine, we ensure that every aspect of the event is
                authentic and culturally significant. <br> <br> Our team also works closely with local Tamil artists and
                artisans to showcase their talents and promote their work.

                At the heart of our mission is a commitment to preserving and promoting Tamil culture for future
                generations. We believe that our events not only educate people about Tamil culture but also provide a
                platform for Tamil communities to come together and celebrate their shared heritage.</p>
        </div>
        <div class="about-image">
            <img src="../image/rope.jpg" alt="Event Planners">
        </div>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>

<script>
  $(document).ready(function(){
    $('.slider').slick();
  });
</script>

</script>
<?php
require '../Templates/footer.php';
?>