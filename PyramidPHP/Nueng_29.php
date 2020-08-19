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
                for ($one=3; $one >= $nueng; $one--)
                {
                    echo (" ");
                }
                for ($one=1; $one <= $nueng; $one++)
                {
                    echo ("*");
                }
                for ($one=2; $one <= $nueng; $one++)
                {
                    echo ("*");
                }
                
            echo ("\n");
            }
            for ($nueng=1; $nueng <= 2; $nueng++)
            {
                for ($one=1; $one <= $nueng+1; $one++)
                {
                    echo (" ");
                }
                for ($one=$nueng; $one <= 2; $one++)
                {
                    echo ("*");
                }
                for ($one=$nueng; $one <= 1; $one++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>