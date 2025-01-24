<?php include("header.php"); ?>

<main>
    <h1>About me</h1>

    <p>
        Hi! I'm Brandon, an 18-year-old student currently studying at GLU in Utrecht, Netherlands. Originally from the
        Philippines, I’ve always been passionate about exploring new cultures and learning different perspectives, which
        has made my time here in the Netherlands so exciting.

        When I'm not doing something for school, you’ll probably find me gaming or playing sports. I love the thrill of
        competition and enjoy the balance between staying active and immersing myself in virtual worlds. Whether it’s a
        casual game or a weekend basketball match, I’m always up for a challenge!

        I’m driven by curiosity, and I’m constantly looking to grow, learn, and connect with others. Feel free to reach
        out if you'd like to chat about gaming, sports, or anything else that sparks your interest!
    </p>

    <h2>My Activities In My Free Time</h2>
    <p>Here's a quick look at what i do in my free time:</p>

    <!-- Canvas for the chart -->
    <canvas id="myBarChart" width="400" height="200"></canvas>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myBarChart').getContext('2d');

    const data = {
        labels: ['Gaming', 'Sports', 'Relaxing', 'Socializing'],
        datasets: [{
            label: '',
            data: [15, 15, 20, 13],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    };

    const options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>

<?php include("footer.php"); ?>
