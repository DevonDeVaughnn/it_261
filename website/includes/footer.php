<footer class="footer">
    <ul>
        <li>Copyright &copy;
            <?php
$date_current = date('Y');
$date_created = 2017;
if ($date_current == $date_created) {
    echo $date_current;
} else {
    echo '' . $date_created . ' - ' . $date_current . '';
}
?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="../portal/index.php">Web Design by Devvy</a></li>
        <li><a href="">HTML Validation</a></li>
        <li><a href="">CSS Validation</a></li>
    </ul>
</footer>
</div>
<!--End wrapper-->
</body>

</html>