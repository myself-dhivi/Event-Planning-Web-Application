<?php  
require '../Templates/Header.php'; 
require '../Templates/Nav.php'; 
?>
<div class="booking-from">
    <form onsubmit="submitForm(); return validateForm()">
        <h1 style="font-size: 20px;">Personal Details</h1>
        <label for="Name">Name <span class=""></span></label>
        <input type="text" id="name" name="Name" required>

        <label for="Phone">Phone Number<span class=""></span></label>
        <input type="text" id="Phone" name="Phone" required>

        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <div style="width: 48%;">
                <label for="phone2">Alternate Phone Number <span class=""></span></label>
                <input type="text" id="phone2" name="phone2">
            </div>
            <div style="width: 48%;">
                <label for="email">Email <span class=""></span></label>
                <input type="text" id="email" name="email" required>
            </div>
        </div>

        <div>
            <label for="msg">Wanna Say Something?</label>
            <input type="text" id="msg" name="msg">
        </div>

        <h1 style="font-size: 20px;">Event Details</h1>
        <label for="location">Location <span class=""></span></label>
        <input type="text" id="location" value="<?= $_GET['location'] ?? '' ?>">

        <label for="event">Type of Event <span class=""></span></label>
        <select id="event" name="event" value="<?= $_GET['event'] ?? '' ?>">
            <option value="" <?= !isset($_GET['event']) ? 'selected' : '' ?>>Select Event</option>
            <option value="Weddings" <?= isset($_GET['event']) && $_GET['event'] == 'Weddings' ? 'selected' : '' ?>>
                Weddings</option>
            <option value="Birthdays" <?= isset($_GET['event']) && $_GET['event'] == 'Birthdays' ? 'selected' : '' ?>>
                Birthdays</option>
            <option value="Ear Piercing Ceremony"
                <?= isset($_GET['event']) && $_GET['event'] == 'Ear Piercing Ceremony' ? 'selected' : '' ?>>Ear Piercing
                Ceremony</option>
            <option value="Housewarming"
                <?= isset($_GET['event']) && $_GET['event'] == 'Housewarming' ? 'selected' : '' ?>>Housewarming</option>
            <option value="Baby Shower"
                <?= isset($_GET['event']) && $_GET['event'] == 'Baby Shower' ? 'selected' : '' ?>>Baby Shower</option>
        </select>

        <label for="date">Date <span class=""></span></label>
        <input type="text" id="date" value="<?= $_GET['date'] ?? '' ?>" required>

        <label for="people">Number of People</label>
        <input type="text" id="people" name="people" required>

        <label for="photographer">Photographer <span class=""></span></label>
        <select id="photographer" name="photographer">
            <option value=""></option>
            <option value="John Smith">John Smith</option>
            <option value="Jane Doe">Jane Doe</option>
            <option value="Mike Johnson">Mike Johnson</option>
        </select>

        <label for="caterer">Caterer <span class=""></span></label>
        <select id="caterer" name="caterer">
            <option value=""></option>
            <option value="ABC Catering">ABC Catering</option>
            <option value="XYZ Catering">XYZ Catering</option>
            <option value="123 Catering">123 Catering</option>
        </select>
        <label for="Hall">Function Hall <span class=""></span></label>
        <select id="Hall" name="Hall">
            <option value=""></option>
            <option value="ABC Catering">ABC hall</option>
            <option value="XYZ Catering">XYZ hall</option>
            <option value="123 Catering">123 hall</option>
        </select>


        <input type="submit" value="Submit" id="submit-btn" onclick="submitForm()">
    </form>
</div>


<script>





  const submitBtn = document.getElementById("submit-btn");

  submitBtn.addEventListener("click", function() {
    const name =  document.getElementById("name").value; // replace with the actual name
    const event = document.getElementById("event").value; // replace with the actual event type
    const date = document.getElementById("date").value; // replace with the actual date


    console.log(name +" " + event +" "+ date);
    alert("Hello, Mr. " + name + "! We are excited to inform you that your " + event + " has been scheduled for " + date + ". Our team will be reaching out to you shortly to confirm the details. Thank you for choosing our services!");
    window.location.href ="./index.php";
  }); }
</script>





<?php  require '../Templates/footer.php'; ?>