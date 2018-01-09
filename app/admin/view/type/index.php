<script src="https://cdn.bootcss.com/jquery/2.2.3/jquery.js"></script>
<div class="page-toolbar">
        <div class="layui-btn-group fl">
            <a href="{:url('add')}" class="layui-btn layui-btn-primary"><i class="aicon ai-tianjia"></i>添加</a>
        </div>
    </div>
    <div class="layui-form">
        <table class="layui-table mt10" lay-even="" lay-skin="row">
            <colgroup>
                <col width="50">
                <col width="150">
                <col width="200">
                <col width="300">
                <col width="100">
                <col width="80">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>id</th>
                <th>分类名称</th>
                <th>父类id</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

            {volist name="type" id="vo"}
            <tr>
                <td>{$vo['id']}</td>
                <td>{$vo['level']}{$vo['name']}</td>
                <td>{$vo['pid']}</td>
                <td>

                    <input type="checkbox" name="status" {if condition="$vo['status'] eq 1"}checked=""{/if} value="{$vo['status']}" lay-skin="switch" lay-filter="switchStatus" lay-text="正常|关闭" data-href="{:url('status?table=type&ids='.$vo['id'])}">
                </td>
                <td>
                    <div class="layui-btn-group">
                        <div class="layui-btn-group">

                            <a href="{:url('edit?id='.$vo['id'])}" class="layui-btn layui-btn-primary layui-btn-small"><i class="layui-icon"></i></a>
                            <a data-href="{:url('del?table=表名(无表前缀)&id='.$vo['id'])}" class="layui-btn layui-btn-primary layui-btn-small j-tr-del"><i class="layui-icon"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
            {/volist}
            </tbody>
        </table>
    </div>
</form>

{include file="admin@block/layui" /}
    <script>
        function change(id,sta){
            var data={
                id:id,
                status:sta
            };
            $.get('admin/type/change',data,function(a){
                console.log(a);
            })
        }
    </script>

