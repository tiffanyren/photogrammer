<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/browse.css" rel="stylesheet">

<style>
.link {padding: 0.5em 1em; background: transparent;border:#292830 0.07em solid;border-left:0;cursor:pointer;color:#292830}
.disabled {cursor:not-allowed;color: grey;}
.current {background: #292830; color: white;}
.first{border-left:#292830 0.07em solid;}
#pagination{margin-top: 2em; padding-top: 3em;border-top: none;}
.dot {padding: 1em 1.5em;background: transparent;border-right: #292830 0.07em solid;}
.page-content {padding-bottom: 2em;margin: 0 auto;}
</style>

</head>

<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function getresult(url) {
	$.ajax({
		url: url,
		type: "GET",
        data:  {rowcount:$("#rowcount").val()},
		success: function(data){
		$("#pagination-result").html(data);
		},
		error: function() 
		{} 	        
   });
}
function changePagination(option) {
	if(option!= "") {
		getresult("getresult.php");
	}
}
</script>
</HEAD>
<BODY>
<?php include("headerbar.php")?>
<div class="page-content">
	
	<div id="pagination-result">
	<input type="hidden" name="rowcount" id="rowcount" />
	</div>
</div>

<script>
getresult("getresult.php");
</script>

       <!-- filter/sort footer -->
    <section class="footer">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       
        <!-- sort a-z -->
            <div class="dropup">
                <a class="button_nav button_trans">Sort</a>
                <div class="dropup-content">
                    <input type="checkbox" name="sort" value="sort" id="sort"
                        <?php if(isset($_POST['sort'])) echo "checked='checked'"; ?>>A-Z
                </div>
            </div>

            <!-- scenery -->
            <div class="dropup">
                <a class="button_nav button_trans">Scenery</a>
                <div class="dropup-content">
                    <input type="checkbox" name="citylife" value="Citylife"
                        <?php if(isset($_POST['citylife'])) echo "checked='checked'"; ?>>Citylife<br>
                    <input type="checkbox" name="nature" value="Nature"
                        <?php if(isset($_POST['nature'])) echo "checked='checked'"; ?>>Nature
                </div>
            </div>

            <!-- location -->
            <div class="dropup">
                <a class="button_nav button_trans">Location</a>
                <div class="dropup-content">
                    <input type="checkbox" name="vancouver" id="vancouver" value="Vancouver, BC"
                        <?php if(isset($_POST['vancouver'])) echo "checked='checked'"; ?>>Vancouver, BC<br>
                    <input type="checkbox" name="toronto" value="Toronto, ON"
                        <?php if(isset($_POST['toronto'])) echo "checked='checked'"; ?>>Toronto, ON
                </div>
            </div>
            
            <!-- submit -->
            <input type="submit" name="submit" value="submit" id="submit" class="button_nav button_trans">
        </form>
    </section>
    <script>

// function processForm() { 
//     $.ajax( {
//     type: 'POST',
//     url: 'getresult.php',
//     data: { sort : $('input:checkbox:checked').val()},

//     success: function(data) {
//         $('#message').html(data);
//     }
// } );
// }
</script>

</body>

</html>





