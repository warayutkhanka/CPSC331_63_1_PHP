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
                echo ("*");
                echo (($nueng*2)-1);
                echo ("*");
                echo ($nueng*2) ; 
                echo ("\n");
            }
        ?>
    </pre>
</body>