        </div>
    </div>
</div>
<div id="footer-group-wrapper" class="full-width">
    <div id="footer-group" class="container-16">
        <div id="footer-group-inner" class="grid-16">
            <?php if ($footer): ?>
            <div id="footer-region" class="region grid-16 clear-block">
            <?php print $footer; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($footer_message): ?>
            <div id="footer-message" class="grid-14">
            <?php print $footer_message; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php print $closure; ?>
</body>
</html>