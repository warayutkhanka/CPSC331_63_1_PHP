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
             
                 for ($one=4; $one >= $nueng; $one--)
                {
                    echo " ";
                }
                    echo $nueng;
                 for ($one=2; $one <= $nueng; $one++)
                {
                    echo "**";
                }
                    echo $nueng;
            
            echo "\n";
            }
            
             for ($nueng=2; $nueng <= 4; $nueng++)
            {
             
                 for ($one=1; $one <= $nueng; $one++)
                {
                    echo " ";
                }
                    echo 5-$nueng;
                 for ($one=3; $one >= $nueng; $one--)
                {
                    echo "**";
                }
                    echo 5-$nueng;
            
            echo "\n";
            }
        ?>
    </pre>
</body>
