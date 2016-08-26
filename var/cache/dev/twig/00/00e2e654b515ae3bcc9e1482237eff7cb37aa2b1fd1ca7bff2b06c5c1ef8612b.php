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
        $__internal_7aa0326536d68bc698dc668fd3fd96c39d1460a59dcd456d0ff14cc1c124b423 = $this->env->getExtension("native_profiler");
        $__internal_7aa0326536d68bc698dc668fd3fd96c39d1460a59dcd456d0ff14cc1c124b423->enter($__internal_7aa0326536d68bc698dc668fd3fd96c39d1460a59dcd456d0ff14cc1c124b423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7aa0326536d68bc698dc668fd3fd96c39d1460a59dcd456d0ff14cc1c124b423->leave($__internal_7aa0326536d68bc698dc668fd3fd96c39d1460a59dcd456d0ff14cc1c124b423_prof);

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
