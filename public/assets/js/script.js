// script.js
function exibirInfo(devId) {
    // Define os dados dos desenvolvedores em um objeto
    const devs = {
        dev1: {
            name: "Iara",
            photo: "assets/img/dev1.jpg",
            socials: {
                whatsapp: "https://web.whatsapp.com/",
                instagram: "https://www.instagram.com/accounts/login/",
                linkedin: "https://linkedin.com/in/dev1",
            }
        },
        dev2: {
            name: "Felipe",
            photo: "assets/img/dev2.jpg",
            socials: {
                whatsapp: "https://web.whatsapp.com/",
                instagram: "https://www.instagram.com/accounts/login/",
                linkedin: "https://linkedin.com/in/dev2",
            }
        },
        dev3: {
            name: "Kaue",
            photo: "assets/img/dev3.jpg",
            socials: {
                whatsapp: "https://web.whatsapp.com/",
                instagram: "https://www.instagram.com/accounts/login/",
                linkedin: "https://linkedin.com/in/dev3",
            }
        },
        dev4: {
            name: "Samuel",
            photo: "assets/img/dev4.jpg",
            socials: {
                whatsapp: "https://web.whatsapp.com/",
                instagram: "https://www.instagram.com/accounts/login/",
                linkedin: "https://linkedin.com/in/dev4",
            }
        },
        dev5: {
            name: "Vitoria",
            photo: "assets/img/dev5.jpg",
            socials: {
                whatsapp: "https://web.whatsapp.com/",
                instagram: "https://www.instagram.com/accounts/login/",
                linkedin: "https://linkedin.com/in/dev5",
            }
        }
    };

    // Verifica se o ID existe no objeto devs
    if (devs[devId]) {
        const devInfo = devs[devId];

        // Atualiza a foto, nome e links das redes sociais
        document.getElementById("dev-photo").src = devInfo.photo;
        document.getElementById("dev-photo").style.display = "block";
        document.getElementById("dev-name").textContent = devInfo.name;

        document.getElementById("whatsapp").href = devInfo.socials.whatsapp;
        document.getElementById("instagram").href = devInfo.socials.instagram;
        document.getElementById("linkedin").href = devInfo.socials.linkedin;
        
        document.getElementById("dev-socials").style.display = "block";
    } else {
        console.error("Desenvolvedor não encontrado.");
    }
}
