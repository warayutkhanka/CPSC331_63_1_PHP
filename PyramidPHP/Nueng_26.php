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
            for ($nueng=1; $nueng <= 5; $nueng++)
            {
                for ($one=1; $one <= $nueng; $one++)
                {
                    echo (" ");
                }
                for ($one=$nueng; $one <= 5; $one++)
                {
                    echo ("*");
                }
                for ($one=$nueng; $one <= 4; $one++)
                {
                    echo ("*");
                }
                for ($one=$nueng; $one >= 1; $one--)
                {
                    echo ($one);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>