<input <?php if($row->required == 1): ?> required <?php endif; ?> type="text" class="form-control" name="<?php echo e($row->field); ?>"
        placeholder="<?php echo e(isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name); ?>"
       <?php echo isBreadSlugAutoGenerator($options); ?>

       value="<?php echo e($dataTypeContent->{$row->field} ?? old($row->field) ?? $options->default ?? ''); ?>">
<?php /**PATH C:\laragon\www\laravel_platz\vendor\tcg\voyager\src/../resources/views/formfields/text.blade.php ENDPATH**/ ?>