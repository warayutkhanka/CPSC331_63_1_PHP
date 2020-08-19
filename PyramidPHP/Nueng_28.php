<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($nueng=1; $nueng <= 3; $nueng++)
            {
                for ($one=$nueng; $one <= 3; $one++)
                {
                   echo ($one);
                }
                for ($one=1; $one <= $nueng; $one++)
                {
                   echo ("*");
                }
                for ($one=2; $one <= $nueng; $one++)
                {
                   echo ("*");
                }
                for ($one=3; $one >= $nueng; $one--)
                {
                   echo ($one);
                }
                
           echo ("\n");
            }
            for ($nueng=2; $nueng <= 3; $nueng++)
            {
                for ($one=1; $one <= $nueng; $one++)
                {
                   echo (4-(4-$one));
                }
                for ($one=$nueng; $one <= 3; $one++)
                {
                   echo ("*");
                }
                for ($one=$nueng; $one <= 2; $one++)
                {
                   echo ("*");
                }
                for ($one=1; $one <= $nueng; $one++)
                {
                   echo (4-$one);
                }
           echo ("\n");
            }
        ?>
    </pre>
</body>