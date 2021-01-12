# 系統畫面

## ◆訪客首頁
- 套房管理訪客首頁，上方導覽列有房型介紹及費用說明
<a href="https://imgur.com/EAzRLhL"><img src="https://i.imgur.com/EAzRLhL.png" title="source: imgur.com" /></a>
<a href="https://imgur.com/TxYmuFS"><img src="https://i.imgur.com/TxYmuFS.png" title="source: imgur.com" /></a>
## ◆房型介紹
- 顯示所有的房型，同時有完整的風格介紹
<a href="https://imgur.com/UoFGaQi"><img src="https://i.imgur.com/UoFGaQi.png" title="source: imgur.com" /></a>

## ◆費用說明
- 說明房型的價格
<a href="https://imgur.com/fS4jlRC"><img src="https://i.imgur.com/fS4jlRC.png" title="source: imgur.com" /></a>

## ◆房客首頁
<a href="https://imgur.com/IOrlPPE"><img src="https://i.imgur.com/IOrlPPE.png" title="source: imgur.com" /></a>

## ◆房客-房客資訊查看
- 供房客查看自己租的房型及租約期限
<a href="https://imgur.com/2ECkx11"><img src="https://i.imgur.com/2ECkx11.png" title="source: imgur.com" /></a>

## ◆房客-信件包裹查詢
- 供房客查詢是否有信件或包裹寄達
<a href="https://imgur.com/eQkU7bw"><img src="https://i.imgur.com/eQkU7bw.png" title="source: imgur.com" /></a>

## ◆房客-費用查看
- 供房客查詢每個月該繳費的各式金額
<a href="https://imgur.com/4390Q1Q"><img src="https://i.imgur.com/4390Q1Q.png" title="source: imgur.com" /></a>

## ◆房客-修繕回報
- 供房客反應房間需維修的物品
<a href="https://imgur.com/kpoajUP"><img src="https://i.imgur.com/kpoajUP.png" title="source: imgur.com" /></a>




## ◆後台首頁
<a href="https://imgur.com/nJ8buYN"><img src="https://i.imgur.com/nJ8buYN.png" title="source: imgur.com" /></a>

## ◆後台會員管理
- 管理所有會員資料，可檢視、新增、刪除、修改會員資料
<a href="https://imgur.com/7SgCEqm"><img src="https://i.imgur.com/7SgCEqm.png" title="source: imgur.com" /></a>

## ◆後台費用管理
- 管理所有房間的費用，可檢視、新增、刪除、修改房間費用
<a href="https://imgur.com/64vwTqT"><img src="https://i.imgur.com/64vwTqT.png" title="source: imgur.com" /></a>

## ◆後台信件管理
- 管理每個房間的來信，並通知該房間之房客有無來信可領取
<a href="https://imgur.com/QcN1a6p"><img src="https://i.imgur.com/QcN1a6p.png" title="source: imgur.com" /></a>

## ◆後台修繕回報管理
- 管理所有房間的修繕回報，並更新修繕進度給房客了解
<a href="https://imgur.com/yk7WGqJ"><img src="https://i.imgur.com/yk7WGqJ.png" title="source: imgur.com" /></a>





## 系統名稱及作用

套房租屋管理系統

   - 改善人工方式處理房客資訊
    
   - 讓房客及管理者方便且快速的管理或瀏覽所需   
    


## 系統的主要功能
★ 訪客
  - 首頁 (Route::get('/', function () {return view('frontend.index');})->name('home');)  [3A732093 廖韋臣](https://github.com/3A732093)
  - 房型說明 (Route::get('room', [RoomController::class, 'index'])->name('room.index');) [3A732093 廖韋臣](https://github.com/3A732093)
  - 費用說明 (Route::get('costdes', [CostController::class, 'costdes'])->name('costdes.index');) [3A732093 廖韋臣](https://github.com/3A732093)
  
★ 前台
  - 房客首頁 (Route::get('tenant', function () {return view('tenant.index');})->name('tenant.index');)  [3A732093 廖韋臣](https://github.com/3A732093)
  - 費用查看 (Route::get('tenant/cost', [CostController::class, 'index'])->name('cost.index');) [3A732093 廖韋臣](https://github.com/3A732093)
  - 信件包裹查詢 (Route::get('tenant/mail', [MailController::class, 'index'])->name('mail.index');) [3A732093 廖韋臣](https://github.com/3A732093)
  - 房客資訊查看 (Route::get('tenant/users_show',[UserController::class,'show'])->name('users_show.index');) [3A732093 廖韋臣](https://github.com/3A732093)
  - 修繕回報 (Route::get('tenant/repair', [RepairController::class, 'index'])->name('repair.index');) [3A732093 廖韋臣](https://github.com/3A732093)、[3A732082 林江閤](https://github.com/3A732082)

★ 後台
  - 後台首頁 (Route::get('admin', function () { return view('admin.index');})->name('admin.index');) [3A732082 林江閤](https://github.com/3A732082)
  - 會員管理 (Route::get('admin/member', [UserController::class, 'index'])->name('admin.member.index');) [3A732082 林江閤](https://github.com/3A732082)
  - 費用管理 (Route::get('admin/cost', [CostController::class, 'admin_index'])->name('admin.cost.index');) [3A732082 林江閤](https://github.com/3A732082)
  - 信件管理 (Route::get('admin/mails', [MailController::class, 'admin_index'])->name('admin.mails.index');) [3A732082 林江閤](https://github.com/3A732082)
  - 修繕回報管理 (Route::get('admin/repairs', [RepairController::class, 'admin_index'])->name('admin.repairs.index');) [3A732082 林江閤](https://github.com/3A732082)
## ERD
<a href="https://imgur.com/hm7z4XH"><img src="https://i.imgur.com/hm7z4XH.png" title="source: imgur.com" /></a>


## 關聯式綱要圖
<a href="https://imgur.com/JCyoVKd"><img src="https://i.imgur.com/JCyoVKd.png" title="source: imgur.com" /></a>


## 實際資料表欄位設計

- 使用者 (users)資料表

<a href="https://imgur.com/UR2uiBA"><img src="https://i.imgur.com/UR2uiBA.png" title="source: imgur.com" /></a>

- 費用 (costs)資料表

<a href="https://imgur.com/X6JZhVJ"><img src="https://i.imgur.com/X6JZhVJ.png" title="source: imgur.com" /></a>

- 房間 (rooms)資料表

<a href="https://imgur.com/3JZqAG1"><img src="https://i.imgur.com/3JZqAG1.png" title="source: imgur.com" /></a>

- 信件、包裹 (mails)資料表

<a href="https://imgur.com/JetNGiM"><img src="https://i.imgur.com/JetNGiM.png" title="source: imgur.com" /></a>

- 修繕回報 (repairs)資料表

<a href="https://imgur.com/Sh2soeL"><img src="https://i.imgur.com/Sh2soeL.png" title="source: imgur.com" /></a>

- 聯絡人 (contactpersons)資料表

<a href="https://imgur.com/DK1cNE9"><img src="https://i.imgur.com/DK1cNE9.png" title="source: imgur.com" /></a>

## 初始專案與DB負責的同學 

- 初始專案 [3A732082 林江閤](https://github.com/3A732082)
- DB [3A732082 林江閤](https://github.com/3A732082)


## 額外使用的套件或樣板

- 前台樣板：[Heroic Features](https://startbootstrap.com/template/heroic-features) 

        作為前台頁面使用，備有功能型網格供定義

- 後台樣板：[SB-Admin](https://startbootstrap.com/template/sb-admin) 

        作為後台管理使用，介面清楚明瞭，方便操作
        

## 系統測試資料存放位置
    
     final12底下的sql資料夾

## 系統使用者測試帳號

★ 前台

     帳號：1234
     密碼：12341234
    
★ 後台

     帳號：admin
     密碼：12341234

## 系統開發人員與工作分配

   [3A732093 廖韋臣](https://github.com/3A732093)
   
      訪客頁面
      前台管理
      readme 撰寫
      期中報告製作

    
   [3A732082 林江閤](https://github.com/3A732082)
   
      後台管理
      登入後判斷身分別進入前台或後台
      登入頁面修改
      DB
      期中報告製作
      readme 撰寫
        
