    </div>
    <div id="opdracht">
      <?php
      $titel2=$titel.' <a href="index.php" style="margin-top: 0px;">&#8962;</a>';
      echo $titel2;
      ?>
    </div>
    <div id="code">
    <?php
    $file = explode('/',$titel);
    $source = show_source($file[1], true);
    $sourceParts = explode('****************************',$source);
    print $sourceParts[2];
    ?>
    </div>
  </body>
</html>