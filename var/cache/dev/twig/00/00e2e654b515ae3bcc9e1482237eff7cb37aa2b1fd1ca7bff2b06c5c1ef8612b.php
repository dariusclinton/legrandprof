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
        $__internal_da9a142a52381eada1d152c132b1a02f0c7984ad03a3839d931df26b06bba3d1 = $this->env->getExtension("native_profiler");
        $__internal_da9a142a52381eada1d152c132b1a02f0c7984ad03a3839d931df26b06bba3d1->enter($__internal_da9a142a52381eada1d152c132b1a02f0c7984ad03a3839d931df26b06bba3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_da9a142a52381eada1d152c132b1a02f0c7984ad03a3839d931df26b06bba3d1->leave($__internal_da9a142a52381eada1d152c132b1a02f0c7984ad03a3839d931df26b06bba3d1_prof);

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
