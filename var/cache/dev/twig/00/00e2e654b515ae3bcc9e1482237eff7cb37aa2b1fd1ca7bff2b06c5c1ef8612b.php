<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ceb57f991d553da324317333346662eff21ca55565e593265bca1c40b02bb345 extends Twig_Template
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
        $__internal_23ddbe7906ab1d0a34a7fb159455af8e0d380f966ffa8c0ae8fc6e13e40fe141 = $this->env->getExtension("native_profiler");
        $__internal_23ddbe7906ab1d0a34a7fb159455af8e0d380f966ffa8c0ae8fc6e13e40fe141->enter($__internal_23ddbe7906ab1d0a34a7fb159455af8e0d380f966ffa8c0ae8fc6e13e40fe141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_23ddbe7906ab1d0a34a7fb159455af8e0d380f966ffa8c0ae8fc6e13e40fe141->leave($__internal_23ddbe7906ab1d0a34a7fb159455af8e0d380f966ffa8c0ae8fc6e13e40fe141_prof);

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
