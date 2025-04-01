


let slideIndex = 1;  // ค่าเริ่มต้นของ slide index

// เรียกใช้ฟังก์ชันเริ่มต้นเพื่อแสดงสไลด์แรก
showSlides(slideIndex);

// ฟังก์ชันนี้จะเปลี่ยนสไลด์ตามการคลิกปุ่มควบคุม
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// ฟังก์ชันนี้จะแสดงสไลด์ตาม index ที่กำหนด
function showSlides(n) {
    let slides = document.getElementsByClassName("myslider");

    // ถ้า n มากกว่าจำนวนสไลด์ ให้กลับไปสไลด์แรก
    if (n > slides.length) {
        slideIndex = 1;
    }

    // ถ้า n น้อยกว่าจำนวนสไลด์ ให้ไปสไลด์สุดท้าย
    if (n < 1) {
        slideIndex = slides.length;
    }

    // ซ่อนสไลด์ทั้งหมด
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        
        
    }

    // แสดงสไลด์ปัจจุบัน
    slides[slideIndex - 1].style.display = "block";
   
}
function autoShowSlides() {
    slideIndex++;
    showSlides(slideIndex);
    setTimeout(autoShowSlides, 5000); // เปลี่ยนสไลด์ทุก 2 วินาที
}
autoShowSlides();
 

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

  
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

 
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("year").textContent = new Date().getFullYear();



function showContent(type) {
    const cards = document.querySelectorAll('.col-12');

    cards.forEach(card => {
        if (type === 'all' || card.getAttribute('data-type') === type) {
            card.classList.remove('d-none'); // ใช้ Bootstrap class
        } else {
            card.classList.add('d-none'); // ใช้ Bootstrap class
        }
    });
}

// เรียกใช้งานฟังก์ชันเพื่อแสดงการ์ดทั้งหมดเริ่มต้น
showContent('all');
 


