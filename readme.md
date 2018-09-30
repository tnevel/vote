# 投票系统

- 前台功能

| 功能模块 | 功能描述 | 工作任务 |
| --- | --- | --- |
| 登录 | 代表登录需填写 `姓名/学号` | 关联数据表 `behalf`|
| 候选人 | 动态显示候选人 | 关联数据表 `vote` |
| 投票 | 实现投票人数增加 | 关联数据表 `vote`<br>判断是否登录 &&<br>是否已投票 &&<br>投票时间限制 |
| 票数 | 实时显示票数 | 关联数据表 `vote` |


- 后台功能

| 功能模块 | 功能描述 | 工作任务 |
| --- | --- | --- |
| 后台登录 | 登录后台验证身份 | 关联数据表 `admin` <br /> 输入用户名密码共错误三次 等待24h |
| 设置新投票 | 新建一个投票项目 <br> **必填:** `项目名/项目时效`<br>选填：`项目简介/项目封面`| 关联数据表 `vote_model` |
| 代表录入 | Excel批量导入代表信息 `姓名/学号` | 关联数据表 `behalf` |
| 未投票 | 显示未投票代表 | 关联数据表 `behalf` |
| 访问量 | 显示项目访问量 | 关联数据表 `vote` |

- 其他需求

| 功能模块 | 功能描述 | 工作任务 |
| --- | --- | --- |
| 服务器负载 | 减轻服务器压力 | upstream实现 |
| Nosql | 减轻MySQL I/O压力 | Redis优化 |

- 扩展包使用情况

| 扩展包 | 应用场景 |
| --- | --- |
| barryvdh/laravel-debugbar | 开发调试使用 |
| maatwebsite/excel | 完成代表导入 |
| prettus/l5-repository | 优化架构 |
| tymon/jwt-auth | 用户认证 |
| dingo/api | API设计规范 版本控制 |