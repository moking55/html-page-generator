## อ่านก่อน:
ระบบนี้เขียนและแจกฟรีสำหรับผู้ที่กำลังเขียน HTML และขี้เกียจต้องมานั่ง คัดลอก วาง และแก้ไขสิ่งเดิมซ้ำๆ จึงได้เขียนระบบนี้ขึ้นมา

![](https://i.imgur.com/6Nvw3xz.png)

หน้าเว็บนี้เป็นหน้าง่ายๆอาจจะยังไม่สมบูรณ์เนื่องจากโปรแกรมนี้ถูกสร้างมาแบบรีบๆ (อะนะ) อาจจะยังไม่สะดวกทั้งหมดต้องขอโทษด้วยเด้อ งานรีบจริงๆ

## อธิบายการทำงาน:
หลักๆโปรแกรมนี้จะประกอบไปด้วยส่วนของโฟเดอร์ ประกอบด้วย
1. src จะเป็นส่วนของไฟล์ที่มีการแก้ไขบ่อย
2. dist เป็นส่วนที่ไฟล์ทั้งหมดถูกรวมไว้แล้ว

และไฟล์ต่างๆประกอบด้วย

1. blank_page.php หน้านี้เอาไว้สำหรับทำเป็น template สำหรับคนที่ขี้เกียจต้องมานั่งเขียน container บ่อยๆ ก็ใส่ไฟล์ที่เราเขียนไว้ก่อนหน้าแล้วเรียกใช้ผ่านหน้าเว็บได้เลย
2. header.html เป็นไฟล์ที่ไม่ถูกแก้ไขบ่อยหรือเป้นหน้าที่ตายตัวอยู่แล้วให้เอามาไว้ด้านนอกโฟเดอร์ src
3. footer.html 

และไฟล์อื่นๆท่านสามารถแก้ไขดัดแปลงตามสะดวกได้เลยในไฟล์ index.php

## วิธีติดตั้งและใช้งาน:

ขั้นแรก จะต้องติดตั้ง PHP ก่อนโดยสามารถใช้ XAMPP หรือ Appserv หรือโปรแกรมอื่นๆได้เลยตามที่ท่านสะดวกโดยเราจะใช้ PHP 7.2 ขึ้นไป (5 ไม่แน่ใจว่าได้ไหมยังไม่ได้เทส 😣)

ต่อมาเมื่อเข้ามายังหน้าเว็บแล้วคุณจะเจอกับหัวข้อต่างๆตามรูปภาพด้านบน ให้ท่านทำตามขั้นตอนได้เลย (อย่าลืมไปกำหนดพวก header.html และ footer.html) ด้วยนะ

จากนั้นเมื่อต้องการดูโค้ดที่ท่านเขียนให้เติม /src/{ชื่อไฟล์}.php ตามที่ท่านได้สร้างไว้

**__คำเตือน__** ในโฟเดอร์ src จะต้องเป็นไฟล์ php เท่านั้นที่จะแสดงผลและอย่าลืม include header footer มาด้วยเด้อ (บอกแล้วระบบนี้กึ่งอัตโนมัติ = =)

หากต้องการจะใส่ css ให้สร้างโฟเดอร์ชื่อ assets และนำ css js รูปไปใส่ไว้ในนั้น

เมื่อท่านเขียนหน้าเว็บ HTML ของท่านแล้วก็ถึงเวลาที่จะต้อง Render ออกมาจากไฟล์ PHP แปลงให้เป็น html

1. ให้เข้าไปในหน้าเว็บของโปรแกรมนี้
สองกดที่ render (รอจนหว่าข้อความว่าสำเร็จจพขึ้น)

2. เมื่อเสร็จแล้ว ให้กดดาวน์โหลดโค้ดได้เลย (ขั้นตอนนี้ความไวจะขึ้นอยู่กับความหนักของ assets)

เมื่อได้ไฟล์ zip มาแล้วก็นำไปอัพโหลดได้เลยย!!

### สุดท้ายนี้ก็ขอขอบคุณที่แวะเข้ามากันเด้อ หากจะนำระบบนี้ไปใช้ก็สามารถนำไปใช้งานได้เลยฟรีๆไม่ได้จะคิดเงินแต่อย่างใด แต่หากถูกใจก็กดติดดาวไว้เป็นกำลังใจให้ผมได้ทำระบบใหม่ๆด้วยเด้อ ขอบคุณมากๆคร้าบ ✨
