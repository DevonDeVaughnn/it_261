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
        <li><a href="../index.php">Web Design by Devvy</a></li>
        <li><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fofr.cgc.mybluehost.me%2FIT_261">HTML
                Validation</a></li>
        <li><a
                href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fofr.cgc.mybluehost.me%2FIT_261&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS
                Validation</a></li>
    </ul>
</footer>
</div>
<!--End wrapper-->
</body>

</html>