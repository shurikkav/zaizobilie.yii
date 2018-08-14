<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

				<form id="myform" action="/number/list" method="post">
                    <div class="archive-head">Архив</div>
                    <!--<select v-model="category" v-on:change="onChange" id="nom_year" class="combobox" style='margin-top:5px;'>
                        <option value=0></option>
<?
use app\models\Menu;

$query = Menu::find()->from('core_rubcolumn')->where(['id_type' => 25, 'is_vis'=>'1', 'pid'=>'0']);
$data = $query->orderBy(['sort'=> SORT_DESC])
    ->all();
foreach ($data as $row)
{?>
    <option value=<?=$row->id;?>><?=$row->name;?></option>
<?
}

?>

                    </select>
                    <select style="margin-left:1px;" id="number" class="combobox">
                        <option value="0"></option>
                    </select>-->

                    <template>
                        <div class="container">
                            <select id="firstInput" v-model="selected">
                                <option v-for="option in firstInputOptions" :value="option">
                                    {{ option }}
                                </option>
                            </select>
                            <select id="secondInput" v-model="secondInputSelected">
                                <option v-for="option in secondInputOptions" :value="option">
                                    {{ option }}
                                </option>
                            </select>
                        </div> <!-- /container -->
                    </template>

                    <script>
                        export default {
                            computed: {
                                secondInputOptions(){
                                    return this.selected === 'fruit' ? this.fruit : this.vegetables
                                }
                            },
                            data () {
                                return {
                                    fruit: ['apple', 'banana', 'orange'],
                                    vegetables: ['carrot', 'beet', 'celery'],
                                    firstInputOptions: ['fruit', 'vegetables']
                                    selected: 'fruit',
                                    secondInputSelected: ''
                                }
                            },
                        }
                    </script>

                </form>