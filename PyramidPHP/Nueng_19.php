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
                echo ($nueng);
                for ($one=$nueng; $one <= 9; $one++)
                {
                    echo ("*");
                }
                for ($one=2; $one <= $nueng; $one++)
                {
                    echo (" ");
                }
                echo (6-$nueng);
            echo ("\n");
            }
        ?>
    </pre>
</body>