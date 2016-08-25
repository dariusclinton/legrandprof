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
        $__internal_a6d490f22787e48c65bf7838baed16456dd822d9c82b62a0a7c52929859cf31c = $this->env->getExtension("native_profiler");
        $__internal_a6d490f22787e48c65bf7838baed16456dd822d9c82b62a0a7c52929859cf31c->enter($__internal_a6d490f22787e48c65bf7838baed16456dd822d9c82b62a0a7c52929859cf31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a6d490f22787e48c65bf7838baed16456dd822d9c82b62a0a7c52929859cf31c->leave($__internal_a6d490f22787e48c65bf7838baed16456dd822d9c82b62a0a7c52929859cf31c_prof);

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
