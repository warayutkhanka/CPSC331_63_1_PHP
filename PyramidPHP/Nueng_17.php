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
            for ($nueng=1; $nueng <= 7; $nueng++)
            {
                 for ($one=1; $one <= $nueng; $one++)
                {
                    echo (" ");
                }
                for ($one=0; $one < 3; $one++)
                {
                    echo ($one+$nueng);
                }
                for ($one=0; $one <= $nueng; $one++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>
