document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("header nav a");
    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({ behavior: "smooth" });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(".btn");
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        const targetId = btn.getAttribute("href").substring(1);
        const targetSection = document.getElementById(targetId);
        targetSection.scrollIntoView({ behavior: "smooth" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const badges = document.querySelectorAll(".badge");
    const tooltip = document.getElementById("tooltip");

    badges.forEach(badge => {
        badge.addEventListener("mouseenter", function (e) {
            const skill = badge.getAttribute("data-skill");
            const percent = badge.getAttribute("data-percent");
            tooltip.innerHTML = `${skill}: %${percent}`;
            tooltip.style.opacity = "1";
            tooltip.style.top = `${e.pageY - 20}px`;
            tooltip.style.left = `${e.pageX}px`;
        });

        badge.addEventListener("mousemove", function (e) {
            tooltip.style.top = `${e.pageY - 20}px`;
            tooltip.style.left = `${e.pageX}px`;
        });

        badge.addEventListener("mouseleave", function () {
            tooltip.style.opacity = "0";
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const username = "busrajkara";
    const portfolioGridTop = document.getElementById("portfolio-grid-top");
    const portfolioGridBottom = document.getElementById("portfolio-grid-bottom");

    fetch(`https://api.github.com/users/${username}/repos?sort=updated`)
        .then(response => response.json())
        .then(data => {
            const projects = data.slice(0, 10);

            projects.slice(0, 5).forEach(repo => {
                if (!repo.fork) {
                    fetch(`https://raw.githubusercontent.com/${username}/${repo.name}/main/README.md`)
                        .then(readmeResponse => readmeResponse.text())
                        .then(readmeContent => {
                            const repoElement = document.createElement("div");
                            repoElement.classList.add("portfolio-item");

                            repoElement.innerHTML = `
                                <h3>${repo.name}</h3>
                                <p>${readmeContent.slice(0, 100) || "README içeriği bulunmamaktadır."}...</p>
                                <a href="${repo.html_url}" target="_blank">Projeyi İncele</a>
                            `;

                            portfolioGridTop.appendChild(repoElement);
                        });
                }
            });

            projects.slice(5, 10).forEach(repo => {
                if (!repo.fork) {
                    fetch(`https://raw.githubusercontent.com/${username}/${repo.name}/main/README.md`)
                        .then(readmeResponse => readmeResponse.text())
                        .then(readmeContent => {
                            const repoElement = document.createElement("div");
                            repoElement.classList.add("portfolio-item");

                            repoElement.innerHTML = `
                                <h3>${repo.name}</h3>
                                <p>${readmeContent.slice(0, 100) || "README içeriği bulunmamaktadır."}...</p>
                                <a href="${repo.html_url}" target="_blank">Projeyi İncele</a>
                            `;

                            portfolioGridBottom.appendChild(repoElement);
                        });
                }
            });
        })
        .catch(error => {
            console.error("GitHub API'den veriler alınamadı:", error);
            portfolioGridTop.innerHTML = `<p>Projeler yüklenirken bir hata oluştu.</p>`;
            portfolioGridBottom.innerHTML = `<p>Projeler yüklenirken bir hata oluştu.</p>`;
        });
});
