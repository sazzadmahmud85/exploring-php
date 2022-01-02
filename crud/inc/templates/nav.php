<div class="">
    <div class="float-left">
        <p>
            <a href="/crud/index.php?task=report">All Students</a> |
            <a href="/crud/index.php?task=add">Add New Student</a> |
            <a href="/crud/index.php?task=seed">Seed</a>
        </p>
    </div>
    <div class="float-right">
		<?php
		if ( ! $_SESSION['loggedin'] ):
			?>
            <a href="/crud/auth.php">Log In</a>
		<?php
		else:
			?>
            <a href="/crud/auth.php?logout=true">Log Out</a>
		<?php
		endif;
		?>
    </div>
</div>