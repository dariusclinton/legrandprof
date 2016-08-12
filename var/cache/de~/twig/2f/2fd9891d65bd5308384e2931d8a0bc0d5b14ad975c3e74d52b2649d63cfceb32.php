<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a68f93d0122a738fbd1dd4c5c74fb66de585ceee0098096e86c875be33a4373f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f931f6c7d7a88f4c026ee2b78c24ffaea5c02f408b839b90b0520f15f1da7216 = $this->env->getExtension("native_profiler");
        $__internal_f931f6c7d7a88f4c026ee2b78c24ffaea5c02f408b839b90b0520f15f1da7216->enter($__internal_f931f6c7d7a88f4c026ee2b78c24ffaea5c02f408b839b90b0520f15f1da7216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f931f6c7d7a88f4c026ee2b78c24ffaea5c02f408b839b90b0520f15f1da7216->leave($__internal_f931f6c7d7a88f4c026ee2b78c24ffaea5c02f408b839b90b0520f15f1da7216_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
