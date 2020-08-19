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
                for ($one=7; $one >= $nueng; $one--)
                {
                    echo (8-$one);
                }
                for ($one=1; $one <= $nueng+2; $one++)
                {
                    echo ("*");
                }
                echo ($nueng+2) ;  
            echo ("\n");
            }
        ?>
    </pre>
</body>