<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Name</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="name" id="name" class="demoInputBox">
    </div>
    <div>
        <label>Roll Number</label> <span id="roll-number-info"
            class="info"></span><br /> <input type="text"
            name="roll_number" id="roll_number" class="demoInputBox">
    </div>
    <div>
        <label>Date of Birth</label> <span id="dob-info" class="info"></span><br />
        <input type="date" name="dob" id="dob" class="demoInputBox">
    </div>
    <div>
        <label>Class</label> <span id="class-info" class="info"></span><br />
        <input type="text" name="class" id="class" class="demoInputBox">
    </div>

    <div>
        <label>Major</label> <span id="Major-info" class="info"></span><br />
        <select name="Major" id="Major" class="demoInputBox" required>
            <option value="">اختر التخصص</option>
            <option value="programming" <?php echo isset($Major) && $Major == 'programming'? 'selected' : ''; ?>>programming</option>
            <option value="ComputerScience" <?php echo isset($Major) && $Major == 'ComputerScience'? 'selected' : ''; ?>>ComputerScience</option>
            <option value="engineering" <?php echo isset($Major) && $Major == 'engineering'? 'selected' : ''; ?>>engineering</option>
            
</select>
    </div>
    
    <div> <input type="file" name="fileToUpload"/>  </div>
    <div>

        <input type ="submit" name="add" id="btnSubmit" value="Add" />
    </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#roll_number").val()) {
        $("#roll-number-info").html("(required)");
        $("#roll_number").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#dob").val()) {
        $("#dob-info").html("(required)");
        $("#dob").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#class").val()) {
        $("#class-info").html("(required)");
        $("#class").css('background-color','#FFFFDF');
        valid = false;
    } 
    if(!$("#Major".val())){
        $("#Major-info").html("(required)");
        $("Major").css('background-color','#FFFFDF');
        valid = false;
    }  
    return valid;
}
</script>
</body>
</html>