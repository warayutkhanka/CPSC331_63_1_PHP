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
            for ($nueng=1; $nueng <= 4; $nueng++)
            {
             echo$nueng,$nueng+4;
                 for ($one=1; $one <= $nueng+4; $one++)
                {
                    echo "*";
                }
            echo "\n";
            }
        ?>
    </pre>
</body>
