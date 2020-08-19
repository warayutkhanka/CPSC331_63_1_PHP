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
            for($nueng=1;$nueng<=4;$nueng++)
            {
                for($one=1;$one<=$nueng;$one++)
                {
                    echo " ";
                }
                echo $nueng ,$nueng;
                for($one=3;$one>=$nueng;$one--)
                {
                    echo "**";
                }
                echo $nueng ,$nueng;
                echo "<br/>";               
            }
        ?>
    </pre>
</body>
