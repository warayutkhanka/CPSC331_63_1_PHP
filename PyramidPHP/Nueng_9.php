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
                for ($one=4; $one >= $nueng; $sone--)
                {
                    echo ("*");
                }
                for ($one=1; $one <= $nueng; $one++)
                {
                    echo (6-$nueng);
                }
                for ($one=2; $one <= $nueng; $one++)
                {
                    echo (6-$nueng);
                }
                for ($one=5; $one >= $nueng; $one--)
                {
                    echo ("*");
                } 
            echo ("\n");
            }
        ?>
    </pre>
</body>