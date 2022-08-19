<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id</title>
</head>
<body>
    <main>
        <form action="id.php" method="POST">
            <h1>Create Your Virtual ID</h1>


            <!-- NAME FIELD --> 
            <div class="form-field">
                <label for="field" class="label-required">Name</label>
                <section>
                    <input name="std_name" id="field" required type="text" placeholder="Jane Doe">
                </section>
            </div>

            <!-- PHONE FIELD --> 
            <div class="form-field">
                <label for="phone" class="label-required">Phone</label>
                <section>
                    <input name="std_phone" required type="tel" id="field" placeholder="+880-xxxxxxx">
                </section>
            </div>    

            <!-- EMAIL FIELD --> 
            <div class="form-field">
                <label for="phone" class="label-required">Email</label>
                <section>
                    <input name="std_phone" required type="email" id="email" placeholder="someone@example.com">
                </section>
            </div>    

            <!-- COURSE FIELD --> 
            <div class="form-field">
                <label for="course" class="label-required">Course</label>
                <section>
                    <input name="std_course" required type="text" id="course" placeholder="Javascript">
                </section>
            </div>    

            <!-- BATCH FIELD --> 
            <div class="form-field">
                <label for="batch" class="label-required">Batch No</label>
                <section>
                    <input name="std_batch" required type="text" id="batch" placeholder="Your Batch No">
                </section>
            </div>    

            <!-- BUTTONS -->
            <div class="form-buttons">
                <button name="generate_btn" type="submit" class="a-btn-field">Generate ID</button>
            </div>
        </form>
    </main>
</body>
</html>