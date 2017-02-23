<?php

namespace Database;

use Database\Models\Content;
use Illuminate\Database\Schema\Blueprint;

/**
 * Populates `contents` table.
 */
class PopulateContentsTable extends TableOperation
{
    /**
    * Object callable.
    *
    * @return boolean
    */
    public function __invoke()
    {
        Content::create([
            'type' => 'post',
            'title' => 'Demo post',
            'name' => 'demo-post',
            'address' => 'Tricase',
            'lat' => 39.93042,
            'lng' => 18.355332,
            'license' => 1,
            'text' => '<h1>First demo post</h1>\r\n<p>Eror moditatiori solumqui consequam aut essum rate res aciduntem et pla quaestias aspelibusda sit, assi occus.<br />Et voluptate vel inum alictat et offic tet earum eum si dus.<br />Tempercia sit arum eum ide nit quiaerum landel moluption reiunt lam, tesequam, quas recatiaeris a volor aut ut eos dolupta ssitas cus.<br />Dit, saperuptate di doluptio iusam, incimodipit ma velicaes qui adis eum quatur alit dolendis mossed que officipsant, sit ma voluptia samenihilia pratiostrum que cor molupta sint hiciuntiatus dendiae volendem que debitas minim ullabo. Videnimetur reperfe riorumqui rem. Nequiderspel id quis rehenit, odis sequam fugiam, sitem aliquuntiur, abo. Ut rentus diatur magnamenis acerorr ovitiatio modi conet repel ipsum soluptatur sam sed magnatiam harum aut de as iunditat od que pelit, solectur? Ovid quam quam quam quis sum quidus ratumquia precturi omnisse quiam, omnimet et quis sunt.<br />Lat odistius aceaquisquid minus andusae cestrum quam, ut omnimi, tem volorep elliate imincil et quam vellume es sitinciis eatis sit quodis am delisciderum quam fuga. Rum restiorio te modis eate doluptiam aut a del il inisi cumendae ped eic torita adit quid eum unt laut etur, volorep elestio. Et la sitem. Agnis doles reprectur?<br />Bus. Veruntotati que estis poremod maximenis autae eles non cusdae. Lorae placcusania volore il inctem sinusam repel ipsapid eliquibusam, sinihicat qui aut as aut qui ipienia volorro bearcias susam que nobit poremquia pra volo mil es assitae. Nequis erionet esedita dolorep erchit vitatem ut aut dolestrum labores sintotae. Sum ut voluptatur, audam ea dendempe pedipitatem que odia quam, saersped mo ium quas secte voluptatum rem quatetum aut alicimos aut fugia corro et minus dus, omnimus apedit, optate ad et endiciis quat.<br />Ur? Vitaeperrum explatem quis asincid et reratur? Nonse pe pro minvele cepedipsum nessitatur ad quidusam, simustiam eosam aceaquam diae laborempera ese qui volupta dis volorerae nobitatio molores a doloreped quid et antur aut endignam qui ditem nullabo. Od es maximus ad quibus qui di doluptatur auditatur, quodis debit, sitaturendam ere, culpa explabor sa dolectis autempo ssitatq uosandi arum iusdam harcim voloreh enienis ius aut et volorem olupta venis nimolora pa as aut plandel ium nimilis quo velibus volorporepta poremporeped quatqui dessinv endipsu ntotati isitate verore volorit omnimus, ea que num in nusae maximet odipsap iendessunto berum alignisseque rectore puditionet volectia veleni omnis reperib uscipictios dolupta voluptam eum qui apit et ut ipiciuscit, sundandit occae reperumque consequia pra nonet est idellignihit aut aut odit optatquides a sam adi debis et pero inim venis mi, omniet rem volupta quodit lab inis entur solor autem explabo. Ut odicabor as mil inum quis sint utaerit in ped ute poribusanis inimus atur repe maximet lia consequ ianihic temodi blabor ad exeratus a prere nonse nos estrum volut quam, tempori busam, quameni hiligent hicia que paria pos magnam volorio enis</p>',
            'url' => null,
            'start' => null,
            'end' => null,
            'created' => '2016-02-04 14:17:46',
            'createdby'  => 27,
            'modified' => '2016-02-04 14:19:22',
            'modifiedby'  => 27,
            'hits'  => 3,
            'translation' => 0,
            'enabled' => 1,
            'language' => 'it',
            'parent' => null,
            'import_id' => 'ae58d00a-cb41-11e5-8e2c-1c6f65ad55b6',
            'route' => null,
        ]);


        return true;
    }
}
