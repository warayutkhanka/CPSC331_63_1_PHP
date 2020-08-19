<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($nueng=1; $nueng <= 3; $nueng++)
            {
                for ($one=3; $one >= $nueng; $one--)
                {
                    echo (" ");
                }
                echo ("*");
                for ($one=1; $one <= $nueng; $one++)
                {
                    echo ($nueng);
                }
                for ($one=2; $one <= $nueng; $one++)
                {
                    echo ($nueng);
                }
                echo ("*");
                
            echo ("\n");
            }
            for ($nueng=1; $nueng <= 2; $nueng++)
            {
                for ($one=1; $one <= $nueng+1; $one++)
                {
                    echo (" ");
                }
                echo ("*");
                for ($one=$nueng; $one <= 2; $one++)
                {
                    echo (3-$nueng);
                }
                for ($one=$nueng; $one <= 1; $one++)
                {
                    echo (3-$nueng);
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>