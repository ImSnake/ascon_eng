<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
$APPLICATION->SetTitle("ASCON Solutions");
?><div class="center container">
	 <?$APPLICATION->IncludeComponent(
	"nbrains:slider",
	"ascon-eng",
	Array(
		"BTN_SLIDE_CONTROL" => "bottom",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"HEIGHT" => "260",
		"HIDDEN_ARROWS" => "false",
		"IBLOCK_ID" => "59",
		"IBLOCK_TYPE" => "ascon_eng",
		"PROGRESS_BAR_COLOR" => "C64F15",
		"PROGRESS_BAR_HEIGHT" => "4",
		"PROGRESS_BAR_PLACE" => "bottom",
		"RIGHT_PX_TEXT" => "0",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"TIME_SLIDE" => "8",
		"TOP_PX_TEXT" => "0",
		"WIDTH" => "1280"
	)
);?>
    <div class="main">
        <div class="heading-orange">
            <div class="heading__arrow">
            </div>
            <div class="heading__text">
                Key Products
            </div>
        </div>
        <div class="product-box left">
            <div class="product__img">
                <img alt="kompas-3d" src="/local/templates/ascon_eng/images/products/kompas3d-main-page.jpg">
            </div>
            <div class="product__content">
                <div class="content__heading">
                    <span class="logo-kompas"></span>
                    KOMPAS-3D
                </div>
                <div class="content__text">
                    <p>
                        KOMPAS-3D is intended for creating three-dimensional associative models for individual parts and assembly units containing both original and standardized structural elements. A key feature of KOMPAS-3D is the use of its own mathematical core and parametric technologies developed by ASCON specialists.
                    </p>
                    <p>
                        The system has a powerful functional for the project management including thousand sub-assemblies, parts and standard products. It supports all the capabilities of three-dimensional solid-state modeling that have become a standard for CAD/CAM designs.
                    </p>
                </div>
                <div class="product__btn">
                    <a href="/products/kompas/kompas-3d/">view</a>
                </div>
            </div>
        </div>
        <div class="product-box right">
            <div class="product__content">
                <div class="content__heading">
                    <span class="logo-pilot"></span>
                    Pilot-ICE
                </div>
                <div class="content__text">
                    <p>
                        Pilot-ICE is a system for managing organizational, administrative and technical (engineering) document&nbsp;flow.
                    </p>
                    <p>
                        It represents a&nbsp;single data source which ensures sharing information by&nbsp;all participants of&nbsp;the&nbsp;investment and&nbsp;construction project. Arrange collaboration within the&nbsp;company, as&nbsp;well as&nbsp;with customers and&nbsp;contractors, with the&nbsp;ability to&nbsp;verify, discuss, and&nbsp;store data.
                    </p>
                </div>
                <div class="product__btn">
                    <a href="/products/pilot/pilot-ice/">view</a>
                </div>
            </div>
            <div class="product__img">
                <img alt="pilot-img" src="/local/templates/ascon_eng/images/products/pilot-ice-main-page.jpg">
            </div>
        </div>
        <div class="product-box left">
            <div class="product__img">
                <img alt="renga" src="/local/templates/ascon_eng/images/products/renga-main-page.jpg">
            </div>
            <div class="product__content">
                <div class="content__heading">
                    <span class="logo-renga"></span>
                    Renga
                </div>
                <div class="content__text">
                    <p>
                        As the first Russian developer of BIM solutions, Renga Software creates 3D design products with user-friendly features, intuitive interface, and affordable cost. All the documents created in the program comply with the regulatory framework used in Russia.
                    </p>
                    <p>
                        The products of Renga Software are intended for integrated design: the information model of a construction object created in the Renga system can be used in other stages of its life cycle.
                    </p>
                </div>
                <div class="product__btn">
                    <a href="/products/renga/">view</a>
                </div>
            </div>
        </div>
        <div class="product-box right">
            <div class="product__content">
                <div class="content__heading">
                    <span class="logo-c3d-labs"></span>
                    C3D Toolkit
                </div>
                <div class="content__text">
                    <p>
                        C3D Toolkit is a&nbsp;software development kit (SDK) responsible for&nbsp;constructing, editing, visualizing, and&nbsp;converting geometric models.
                    </p>
                    <p>
                        C3D Toolkit constructs geometric models, performs geometric calculations, and&nbsp;creates connections between the&nbsp;elements of&nbsp;geometric models. C3D Toolkit handles geometric models made in&nbsp;third-party applications and exports geometry to&nbsp;other 3D&nbsp;systems.
                    </p>
                </div>
                <div class="product__btn">
                    <a href="/products/c3d-labs/c3d-toolkit/">view</a>
                </div>
            </div>
            <div class="product__img">
                <img alt="c3d-labs-img" src="/local/templates/ascon_eng/images/products/c3dlabs-main-page.jpg">
            </div>
        </div>
    </div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>