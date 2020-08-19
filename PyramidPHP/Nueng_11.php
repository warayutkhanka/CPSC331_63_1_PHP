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
                for ($one=6; $one >= $nueng; $one--)
                {
                    echo (($one-1)%2);
                }
                echo (($nueng)%2);
                
                for ($one=$nueng; $one <= 6; $one++)
                {
                    echo (($one-1)%2);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>
