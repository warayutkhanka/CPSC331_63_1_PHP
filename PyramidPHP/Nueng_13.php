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
                for ($one=1; $one <= 4; $one++)
                {
                    echo ($nueng);
                    echo (10-$nueng);
                }
                echo ("\n");
            }
        ?>
    </pre>
</body>