</div>
<div class="website">
    <div class="container">
        <div class="website-top">
            <h3>REGISTER WITH US</h3>
        </div>
        <div class="">
            <?php echo validation_errors(); ?>
        </div>

        <?php echo form_open('accounts/register') ?>
            <label for="title">Title</label>
            <input type='text' name="title" /><br/>

            <label for='text'>Text</label>
            <textarea name="text"></textarea><br />

            <input type='submit' name='submit' value="Create news item" />
        </form>
    </div>
</div>
